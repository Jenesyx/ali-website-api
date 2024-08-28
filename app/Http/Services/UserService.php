<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
      public function login($data):JsonResponse
      {
          // Get Value in request :
          $email = $data['email'];
          $password = $data['password'];

          // Find user with name :
          $user = User::where('email', $email)->first();

          // Check is user or not :
          if ($user) {
              // Check password is valid
              $input = ['email' => $email, 'password' => $password];
              $isValid = Auth::attempt($input);
              if ($isValid) {
                  $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
                  return response()->json([
                      'status' => "success",
                      'data' => [
                          'user'=> $user,
                          'token'=> $token
                      ],
                      'message' => 'welcome'
                  ]);
              } else {
                  return response()->json([
                      'status' => 'error',
                      'message' => 'The password is incorrect'
                  ], 401);
              }
          } else {
              return response()->json([
                  'status' => 'error',
                  'message' => 'User with this profile not found'
              ], 404);
          }
      }

      public function register($data):JsonResponse
      {
         $name = $data['name'];
         $email = $data['email'];
         $password = $data['password'];
         $user = User::where('email', $email)->first();
         if($user)
         {
             return response()->json([
                 'status' => 'error',
                 'message' => 'You have already registered with this email'
             ], 409);
         }

         User::create([
             'name' => $name,
             'email' => $email,
             'password' => Hash::make($password),
         ]);

          return response()->json([
              'status' => 'status',
              'message' => 'Your registration was successful'
          ], 201);
      }

      public function show():JsonResponse
      {
         // Service method logic
      }

      public function update():JsonResponse
      {
         // Service method logic
      }

      public function destroy():JsonResponse
      {
         // Service method logic
      }

}
