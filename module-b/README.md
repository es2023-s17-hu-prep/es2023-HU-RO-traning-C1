# Module B - Restaurant Owners' Hub

In this modul you will develop a server-side rendered administration page where restaurant owners can easily manage their restaurant profiles and data. This hub empowers restaurant owners to update menus, respond to reviews, and keep their information up-to-date, ensuring a seamless and engaging experience for customers.Choose a suitable server-side framework from the available options in the provided Infrastructure List. Carefully review the provided detailed description of the dynamic website's account management functionalities. Understand the various tasks and actions that users need to perform within their accounts.

## Task List:

### 1. Database Design:

Design a robust and efficient database schema to accommodate user accounts and related data.
Identify the necessary tables, relationships, and fields required for account management.
Ensure proper normalization and data integrity in the database design.
Utilize the provided example CSV files to import initial data into the database. CSV files can be found in the assets/module-B/initial-data folder.
Develop a script or mechanism to parse and import CSV data into relevant database tables.
Address any data normalization challenges that may arise from the provided CSV data.

### 2. User Authentication and Security:

-   Implement a secure user authentication system to enable users to create and access accounts.
    Utilize encryption and hashing techniques to store and manage user passwords securely. Implement account locking mechanisms to enhance account security.
-   Design a system that supports two user roles: "dineEasyAdmin" and "restaurantAdmin". DineEasy admins will have access to the entire system, while restaurant administrators will have access only to their respective restaurant's data.
-   Develop a user registration mechanism for restaurant administrator roles. Capture essential information, including email address (as username), password, name, restaurant name, type and location. Implement appropriate validation for email address field. Enable the uploading of image for restaurant logo.
-   Create a login form that authenticates users based on their role. Administrators should be redirected to the admin dashboard, while restaurant administrators should be directed to their respective restaurant's dashboard upon successful login.
-   Implement a mechanism to lock user accounts after three failed login attempts. Determine 30 seconds duration for which the account should be locked out. Users should be notified about the account lockout and provided with information about the lock out duration.
-   Configure protected routes that are accessible only after successful user authentication. Implement role-based access control to restrict certain actions to authorized users. Ensure that sensitive account information is accessible only to the respective account owner and dineEasy admins.
-   Create two sample user for both roles:

| email                    | name        | role            | restaurantId | password |
| ------------------------ | ----------- | --------------- | ------------ | -------- |
| ferenc.kis@sze.hu        | Ferenc Kis  | restaurantAdmin | 1            | 12345678 |
| laszlo.nagy@dineeasy.com | Laszlo Nagy | dineEasyAdmin   |              | 12345678 |

-   When the authenticated user click on the Logout link they will be logged out and redirected to the login page.

### 3. Restaurant's dashboard:

Create user-friendly interfaces where restaurant admin user can view and edit their respective restaurant's data.
Follow the provided wireframe in implementing the dashboard. All the subpages of the dashboard should contain a "Back to the dahboard" and a "Logout" link.

-   **Edit profile**
    When the restaurant admin click on the "Edit profile" button they will be redirected to the Edit profile page. On that page all the profile data can be modified and saved.
-   **Menu management**
    Design the interface for restaurant owners to manage their menus.
    Implement CRUD operations for menu items, including adding, updating, and deleting dishes.
    Allow the inclusion of dish names and prices.
-   **Reservation Handling**
    It will be the page for a reservation system with the following feautres:
    _ restaurant owners can manage incoming reservations
    _ Displaying a list of reservations with relevant details like date, time, party size, and contact information \* Enable the confirmation or cancellation of reservations
    **You do not need to implement the features above in your prototype. You should display only the "Reservation" title on this page.**

-   **Review Management**
    Implement a feature for restaurant owners to manage customer reviews.
    Display customer feedback along with ratings and comments.
    In the near feature the page will also allow restaurant owners to post thoughtful responses to reviews, but you do not need to implemet this feature right now.

### 4. OWASP Guidelines Implementation:

Implement security measures to protect against common web vulnerabilities (OWASP guidelines).
Sanitize and validate user inputs to prevent SQL injection and cross-site scripting (XSS) attacks.
Implement CSRF (Cross-Site Request Forgery) protection to ensure secure form submissions.

docker compose exec admin php artisan migrate