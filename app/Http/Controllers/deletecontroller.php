<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class deletecontroller extends Controller
{
    public function destroy($id)
    {
        $client = new Client();

        try {
            $response = $client->request('DELETE', 'https://nplled.smggreen.com/api/AspNetUser/' . $id, [
                'headers' => [
                    'Authorization' => 'Bearer YOUR_ACCESS_TOKEN', // Replace with your actual token
                    'Accept' => 'application/json',
                ]
            ]);

            if ($response->getStatusCode() == 200) {
                return redirect()->back()->with('success', 'User deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to delete user');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete user: ' . $e->getMessage());
        }
    }
}
