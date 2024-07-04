<?php

// app/Http/Controllers/PropertyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function propertyTypeForm()
    {
        try {
            // Fetch property types from the correct API endpoint
            $response = Http::get('https://nplled.smggreen.com/api/PropertySubType');

            if ($response->successful()) {
                $propertyTypes = $response->json()['data'];
                Log::info('Property Types API Response:', $propertyTypes); // Log the entire response data
            } else {
                // Handle error
                $propertyTypes = [];
                Log::error('Failed to fetch property types. Error: ' . $response->status());
            }

            // Pass the property types to the view
            return view('addproperty.addproperty', ['propertyTypes' => $propertyTypes]);

        } catch (\Exception $e) {
            // Handle any exceptions or errors
            Log::error('Exception while fetching property types: ' . $e->getMessage());
            return view('addproperty.addproperty', ['propertyTypes' => []])->withErrors(['error' => 'Failed to fetch property types.']);
        }
    }
    public function filterData1(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "Month"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    public function filterData2(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "PossessionStatus"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    public function filterData3(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "PriceIncludes"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    public function filterData4(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "ShowPriceAs"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function filterData5(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "TransactionType"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function filterData6(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "anyConstructionDone"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function filterData7(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "attachedBalcony"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    public function filterData8(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "attachedBathroom"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    public function filterData9(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "boundaryWallMade"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    public function filterData02(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "cabinMeetingRoom"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    public function filterData03(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "CommonArea"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }


    public function filterData04(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "cornerShop"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    public function filterData05(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "mainRoadFacing"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function filterData06(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "floor"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function filterData07(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "FurnishedStatus"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function filterData08(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "inGatedColony"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function filterData09(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "Bedroom"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    public function filterData11(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "maintenanceChargeFrequency"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }
    public function filterData12(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "noticePeriod"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function filterData13(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "NearSchool"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function filterData14(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "NearHospital"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }

    public function filterData15(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "nearMarket"
        ];

        // Send the POST request with the filter data
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->post('https://nplled.smggreen.com/api/DropDown', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $filterData
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                if (isset($data['success']) && $data['success']) {
                    // Prepare options for the dropdown based on the API response
                    $options = [];
                    foreach ($data['data'] as $item) {
                        $options[] = [
                            'value' => $item['ddlValue'],
                            'text' => $item['ddlText'],
                        ];
                    }

                    // Pass the options and data to the view
                    return view('property.form', compact('options', 'data'));
                } else {
                    return back()->withErrors(['error' => 'API response unsuccessful: ' . ($data['message'] ?? 'Unknown error')]);
                }
            } else {
                return back()->withErrors(['error' => 'API returned status code ' . $response->getStatusCode()]);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'API request failed: ' . $e->getMessage()]);
        }
    }


    public function registerProperty(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'propertyImage' => 'required|array|min:3|max:10',
            'propertyImage.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add other validation rules for other fields as needed
        ]);

        // Handle image uploads and get URLs
        $imageUrls = [];
        if ($request->hasFile('propertyImage')) {
            foreach ($request->file('propertyImage') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/property_images', $filename, 'public');
                $imageUrls[] = Storage::url($filePath);
            }
        }

        // Assuming you receive the property registration data from a form or request
        $propertyData = [
            "packageID" => 1,
            "propertyTypeID" => 1,
            "propertyDetailsForID" => 3,
            "month" => $request->Month,
            "bedroom" => $request->Bedroom,
            "balcony" => 1,
            "floor" => $request->floor,
            "bathroom" => 2,
            "furnishedStatus" => $request->FurnishedStatus,
            "cabinMeetingRoom" => $request->TransactionType,
            "transactionType" => $request->TransactionType,
            "possessionStatus" => $request->PossessionStatus,
            "showPriceAs" => $request->ShowPriceAs,
            "priceIncludes" => $request->PriceIncludes,
            "maintenanceChargeFrequency" => $request->maintenanceChargeFrequency,
            "noticePeriod" => $request->noticePeriod,
            "userID" => 123,
            "cornerShop" => (bool) $request->cornerShop,
            "mainRoadFacing" => (bool) $request->mainRoadFacing,
            "sharedOfficeSpace" => (bool) $request->sharedOfficeSpace,
            "attachedBathroom" => (bool) $request->attachedBathroom,
            "attachedBalcony" => (bool) $request->attachedBalcony,
            "commonArea" => (bool) $request->CommonArea,
            "anyConstructionDone" => (bool) $request->anyConstructionDone,
            "boundaryWallMade" => (bool) $request->boundaryWallMade,
            "inGatedColony" => (bool) $request->inGatedColony,
            "addressLine1" => "123 Main St",
            "addressLine2" => "Apt 101",
            "city" => $request->city,
            "state" => $request->loction,
            "zipCode" => "462042",
            "country" => "India",
            "latitude" => 40.7128,
            "longitude" => -74.006,
            "builtUpArea" => 1500.5,
            "carpetArea" => 1200.75,
            "plotArea" => 2000,
            "unitOfArea" => "sq.ft",
            "price" => 250000,
            "currency" => "INR",
            "ownerName" => "shivam majoka ",
            "ownerContactNumber" => "6260322230",
            "ownerEmail" => "kkumar4981@gmail.com",
            "parkingSpaces" => 2,
            "powerBackup" => true,
            "waterSupply" => true,
            "security" => false,
            "gym" => true,
            "swimmingPool" => false,
            "clubHouse" => false,
            "lift" => true,
            "listingTitle" => "Beautiful Apartment for Sale",
            "listingDescription" => "Spacious 3-bedroom apartment with modern amenities.",
            "propertyStatus" => "Available",
            "listingType" => "Sale",
            "dateAvailable" => "2024-07-01",
            "CreatedDate" => "2024-07-01",
            "agentID" => 456,
            "propertyAge" => 5,
            "ownershipType" => "Freehold",
            "registrationNumber" => "ABC123",
            "legalClearance" => true,
            "nearSchool" => (bool) $request->NearSchool,
            "nearHospital" => (bool) $request->NearHospital,
            "nearMarket" => (bool) $request->nearMarket,
            "nearPublicTransport" => true,
            "nearPark" => true,
            "earthquakeResistant" => true,
            "fireSafety" => true,
            "rainwaterHarvesting" => false,
            "greenBuilding" => true,
            "numberOfFloors" => 10,
            "flooringType" => "Tiles",
            "facingDirection" => "North",
            "garden" => true,
            "terrace" => false,
            "rooftop" => true,
            "electricityAvailable" => true,
            "waterAvailable" => true,
            "gasConnection" => false,
            "internetConnection" => true,
            "cableTV" => true,
            "mortgageStatus" => false,
            "mortgageProvider" => "No",
            "mortgageAmount" => 0.00,
            "emiAmount" => 0.00,
            "petFriendly" => true,
            "handicapAccessible" => false,
            "floorPlan" => "https://example.com/floor-plan.pdf",
            "virtualTour" => "https://example.com/virtual-tour",
            "imageSiteView" => $imageUrls[0] ?? "https://example.com/virtual-tour",
            "imageExteriorView" => $imageUrls[1] ?? "https://example.com/virtual-tour",
            "imageCommonArea" => $imageUrls[2] ?? "https://example.com/virtual-tour",
            "imageLivingRoom" => $imageUrls[3] ?? "https://example.com/virtual-tour",
            "imageBedroom" => $imageUrls[4] ?? "https://example.com/virtual-tour",
            "imageBathroom" => $imageUrls[5] ?? "https://example.com/virtual-tour",
            "imageKitchen" => $imageUrls[6] ?? "https://example.com/virtual-tour",
            "imageFloorPlan" => $imageUrls[7] ?? "https://example.com/virtual-tour",
            "imageMasterPlan" => $imageUrls[8] ?? "https://example.com/virtual-tour",
            "imageLocationMap" => $imageUrls[9] ?? "https://example.com/virtual-tour",
            "imageOther" => $imageUrls[10] ?? "https://example.com/virtual-tour",
            "askedPrice" => 500000
        ];

        // Send the POST request to the API
        // dd($propertyData);
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                //'Authorization' => 'Bearer YOUR_API_TOKEN', // Replace with your actual API token if required
            ])->post('https://nplled.smggreen.com/api/PropertyRegistration', $propertyData);

            if ($response->successful()) {
                $responseData = $response->json();

                if (isset($responseData['success']) && $responseData['success']) {
                    // Handle successful registration
                    return response()->json(['message' => 'Property registered successfully', 'data' => $responseData['data']], $response->status());
                } else {
                    // Handle API response indicating failure
                    return response()->json(['error' => 'Failed to register property. API response: ' . ($responseData['message'] ?? 'Unknown error')], $response->status());
                }
            } else {
                // Handle non-success status codes
                return response()->json(['error' => 'API returned status code ' . $response->status()], $response->status());
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json(['error' => 'API request failed: ' . $e->getMessage()], 500);
        }
    }


}
