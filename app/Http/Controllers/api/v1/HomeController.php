<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Jmrashed\Zkteco\Lib\ZKTeco;

class HomeController extends Controller
{
    public function getVersion(Request $request)
    {
        // Initialize ZKTeco device with the IP address
        $zk = new ZKTeco('192.168.1.203');

        // Try to connect to the device
        if ($zk->connect()) {
            // Fetch the version of the ZKTeco device
            $version = $zk->version();

            // Return the version as a JSON response
            return response()->json([
                'status' => 'success',
                'version' => $version,
            ]);
        } else {
            // If unable to connect, return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to connect to the ZKTeco device.',
            ]);
        }
    }

    public function getPlatform(Request $request)
    {
        // Initialize ZKTeco device with the IP address
        $zk = new ZKTeco('192.168.1.203');

        // Try to connect to the device
        if ($zk->connect()) {
            // Fetch the version of the ZKTeco device
            $platform = $zk->platform();

            // Return the version as a JSON response
            return response()->json([
                'status' => 'success',
                'version' => $platform,
            ]);
        } else {
            // If unable to connect, return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to connect to the ZKTeco device.',
            ]);
        }
    }

    public function testVoice(Request $request)
    {
        // Initialize ZKTeco device with the IP address
        $zk = new ZKTeco('192.168.1.203');

        // Try to connect to the device
        if ($zk->connect()) {
            // Fetch the version of the ZKTeco device
            $testVoice = $zk->testVoice();

            // Return the version as a JSON response
            return response()->json([
                'status' => 'success',
                'testVoice' => $testVoice,
            ]);
        } else {
            // If unable to connect, return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to connect to the ZKTeco device.',
            ]);
        }
    }

    public function getDeviceName(Request $request)
    {
        // Initialize ZKTeco device with the IP address
        $zk = new ZKTeco('192.168.1.203');

        // Try to connect to the device
        if ($zk->connect()) {
            // Fetch the version of the ZKTeco device
            $deviceName = $zk->deviceName();

            // Return the version as a JSON response
            return response()->json([
                'status' => 'success',
                'deviceName' => $deviceName,
            ]);
        } else {
            // If unable to connect, return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to connect to the ZKTeco device.',
            ]);
        }
    }
    public function shutdown(Request $request)
    {
        // Initialize ZKTeco device with the IP address
        $zk = new ZKTeco('192.168.1.203');

        // Try to connect to the device
        if ($zk->connect()) {
            // Restart the ZKTeco device
            $zk->shutdown();

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'The ZKTeco device has been shutdown successfully.',
            ]);
        } else {
            // If unable to connect, return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to connect to the ZKTeco device.',
            ]);
        }
    }

    public function restart(Request $request)
    {
        // Initialize ZKTeco device with the IP address
        $zk = new ZKTeco('192.168.1.203');

        // Try to connect to the device
        if ($zk->connect()) {
            // Restart the ZKTeco device
            $zk->restart();

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'The ZKTeco device has been restarted successfully.',
            ]);
        } else {
            // If unable to connect, return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to connect to the ZKTeco device.',
            ]);
        }
    }

    public function sleep(Request $request)
    {
        // Initialize ZKTeco device with the IP address
        $zk = new ZKTeco('192.168.1.203');

        // Try to connect to the device
        if ($zk->connect()) {
            // Restart the ZKTeco device
            $zk->sleep();

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'The ZKTeco device has been sleep successfully.',
            ]);
        } else {
            // If unable to connect, return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to connect to the ZKTeco device.',
            ]);
        }
    }


    public function resume(Request $request)
    {
        // Initialize ZKTeco device with the IP address
        $zk = new ZKTeco('192.168.1.203');

        // Try to connect to the device
        if ($zk->connect()) {
            // Restart the ZKTeco device
            $zk->resume();

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'The ZKTeco device has been resume successfully.',
            ]);
        } else {
            // If unable to connect, return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to connect to the ZKTeco device.',
            ]);
        }
    }


    public function getRollNo(Request $request)
    {
        // Initialize ZKTeco device with the IP address
        $zk = new ZKTeco('192.168.1.203');

        // Try to connect to the device
        if ($zk->connect()) {
            // Fetch the list of users from the ZKTeco device
            $users = $zk->getUser();

            // Transform the data to the desired format
            $transformedUsers = collect($users)
                ->map(fn($user) => ['roll_no' => $user['userid'] ?? null]) // Map to only include 'roll_no'
                ->values() // Reset the array keys to ensure it becomes a list
                ->toArray(); // Convert the collection back to an array

            // Return the user list as a JSON response
            return response()->json([
                'status' => 'success',
                // 'data' => $users,
                'data' => $transformedUsers,
            ]);
        } else {
            // If unable to connect, return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to connect to the ZKTeco device.',
            ]);
        }
    }

    public function getUsersById(Request $request)
    {
        // Validate the 'roll_no' parameter in the request
        $request->validate([
            'roll_no' => 'required|string',
        ]);

        // Retrieve the roll number from the request
        $rollNo = $request->input('roll_no');

        // Initialize ZKTeco device with the IP address
        $zk = new ZKTeco('192.168.1.203');

        // Try to connect to the device
        if ($zk->connect()) {
            // Fetch the list of users from the ZKTeco device
            $users = $zk->getUser();

            // Find the user with the matching roll number
            $user = collect($users)->firstWhere('userid', $rollNo);

            if ($user) {
                // Return the user details as a JSON response
                return response()->json([
                    'status' => 'success',
                    'data' => [
                        'roll_no' => $user['userid'] ?? null,
                        'name' => $user['name'] ?? 'N/A',
                        'privilege' => $user['role'] ?? 'User',
                        'card' => $user['card'] ?? 'Not Assigned',
                    ],
                ]);
            } else {
                // If the user is not found, return an error response
                return response()->json([
                    'status' => 'error',
                    'message' => 'User not found for the given roll number.',
                ]);
            }
        } else {
            // If unable to connect, return an error response
            return response()->json([
                'status' => 'error',
                'message' => 'Unable to connect to the ZKTeco device.',
            ]);
        }
    }

}
