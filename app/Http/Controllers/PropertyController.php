<?php

// app/Http/Controllers/PropertyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

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
    public function filterData(Request $request)
    {
        // The filter data you need to send
        $filterData = [
            "filter" => "SharedOfficeSpace"
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


}
