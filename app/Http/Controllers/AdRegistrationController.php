namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AdRegistrationController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'AdBlock' => 'required',
            'propertyName' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'budget' => 'required|numeric',
            'typeOfHouse' => 'required|string',
            'numberOfRooms' => 'required|string',
            'Possession' => 'required|string',
            'yearOfProperty' => 'required|numeric|min:1800|max:2024',
            'amenities' => 'nullable|array',
            'amenities.*' => 'nullable|string',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Prepare the data to send to the API
        $data = [
            'AdBlock' => $request->AdBlock,
            'propertyName' => $request->propertyName,
            'city' => $request->city,
            'budget' => $request->budget,
            'typeOfHouse' => $request->typeOfHouse,
            'numberOfRooms' => $request->numberOfRooms,
            'Possession' => $request->Possession,
            'yearOfProperty' => $request->yearOfProperty,
            'amenities' => $request->amenities,
        ];

        // Handle photo uploads
        $photos = $request->file('photos');
        if ($photos) {
            foreach ($photos as $index => $photo) {
                $photoPath = $photo->store('photos', 'public');
                $data['Image' . ($index + 1)] = url('storage/' . $photoPath);
            }
        }

        // Log the data being sent for debugging
        Log::info('Sending data to API: ', $data);

        // Send the data to the API
        try {
            $response = Http::withOptions(['verify' => false])->post('https://nplled.smggreen.com/api/AdRegistration', $data);

            // Log the API response for debugging
            Log::info('API Response: ', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            // Check for successful response
            if ($response->successful()) {
                return redirect()->back()->with('success', 'Advertisement registered successfully!');
            } else {
                $error = $response->json();
                return redirect()->back()->with('error', 'Failed to register advertisement. Error: ' . json_encode($error));
            }
        } catch (\Exception $e) {
            Log::error('API Request Failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to register advertisement. Please try again later.');
        }
    }

    public function fetchAds()
    {
        try {
            $response = Http::withOptions(['verify' => false])->get('https://nplled.smggreen.com/api/AdRegistration');

            // Log the raw response body
            Log::info('API Fetch Response Body: ' . $response->body());

            // Check the response status code
            $status = $response->status();
            Log::info('API Fetch Response Status: ' . $status);

            if ($response->successful()) {
                $ads = $response->json();

                // Log the data structure
                Log::info('Ads Data: ', $ads);

                // Ensure ads data is an array and contains the expected structure
                if (is_array($ads) && !empty($ads)) {
                    // Handle case if the ads data is wrapped in another array
                    $ads = isset($ads[0]) && is_array($ads[0]) ? $ads : [$ads];
                    return view('admin.Add_blockDetails', ['ads' => $ads]);
                } else {
                    Log::info('No advertisements found in the response.');
                    return view('admin.Add_blockDetails', ['ads' => []])->with('error', 'No advertisements found.');
                }
            } else {
                $error = $response->json();
                Log::error('Failed to fetch advertisements. Error: ' . json_encode($error));
                return view('admin.Add_blockDetails', ['ads' => []])->with('error', 'Failed to fetch advertisements. Error: ' . json_encode($error));
            }
        } catch (\Exception $e) {
            Log::error('API Fetch Request Failed: ' . $e->getMessage());
            return view('admin.Add_blockDetails', ['ads' => []])->with('error', 'Failed to fetch advertisements. Please try again later.');
        }
    }
}
