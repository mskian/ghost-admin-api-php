# Ghost Admin PHP 🍔

A Simple PHP POST API for Ghost to Create Blog Post using Ghost Admin API 📝

## Requirements 📑

- Active Ghost Site
- Server with PHP Support for Running the API
- PHP cURL
- SSL for Secure Connection

## Setup 🍞

Open `config.php` file
- Replace `http://localhost:2368` with your Ghost Domain ([Line 9](https://github.com/mskian/ghost-admin-api-php/blob/e7a1c84c18fab56d2651c796020a475cd307aff1/config.php#L9))
- Replace `someone@example.com` with your Ghost Username ([Line 19](https://github.com/mskian/ghost-admin-api-php/blob/e7a1c84c18fab56d2651c796020a475cd307aff1/config.php#L19))
- Replace `mysecurepassword` with your Ghost Password ([Line 20](https://github.com/mskian/ghost-admin-api-php/blob/e7a1c84c18fab56d2651c796020a475cd307aff1/config.php#L20))

## Usage 🍟

- Create Session and Auth your Ghost site
- Just Open the Below URL format on Browser and Create Ghost API Session

```bash
https://api.example.com/ghlogin.php
```

- Create a New Post - This is Just a PHP API Endpoint

```bash
https://api.example.com/post.php?title=Post%20via%20API&html=Hello%20world%20My%20new%20post%20via%20API
```

## Ghost Admin API 📦

- User Authentication - <https://ghost.org/docs/admin-api/#user-authentication>
- Create Post - <https://ghost.org/docs/admin-api/#creating-a-post>

## LICENSE ✅

MIT
