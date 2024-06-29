Car Parking System API
======================

Description
-----------

This project is a Laravel-based API for a car parking system. It includes features such as user authentication, vehicle management, profile management, and the ability to start and stop parking sessions.

Features
--------

*   **User Authentication:** Register, login, and manage users.
    
*   **Vehicle Management:** Add, update, and delete vehicles.
    
*   **Profile Management:** Manage user profiles.
    
*   **Parking Management:** Start and stop parking sessions.
    

API Endpoints
-------------

### Authentication

*   **Register:** POST /api/v1/auth/register
    
*   **Login:** POST /api/v1/auth/login
    
*   **Logout:** POST /api/v1/auth/logout
    

### Vehicle Management

*   **Get User's Vehicles:** GET /api/v1/vehicles
    
*   **Add Vehicle:** POST /api/v1/vehicles
    
*   **Get Individual Vehicle:** GET /api/v1/vehicles/{id}

*   **Update Vehicle:** PUT /api/v1/vehicles/{id}
    
*   **Delete Vehicle:** DELETE /api/v1/vehicles/{id}
    

### Profile Management

*   **View Profile:** GET /api/v1/profile
    
*   **Update Profile:** PUT /api/v1/profile

*   **Change Password:** PUT /api/v1/password
    

### Parking Management

*   **Start Parking:** POST /api/v1/parking/start

*   **Show Parking Data:** GET /api/v1/parking/{id}
    
*   **Stop Parking:** PUT /api/v1/parking/{id}
