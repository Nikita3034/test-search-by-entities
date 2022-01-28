## Problem:

    Create 3 entities with the following fields:
    - Region (name, tranislit)
    - City (name, translit, link to the region)
    - District (name, translit, link to city)

    Using Laravel tools, it is necessary to implement a list of settlements and associated areas, a filter with the ability to search by the name of the settlement and area.

    * Create a migration from the test site to prod.

## Solution:

### Database structure:

![image](https://user-images.githubusercontent.com/37295991/133576539-5762e350-bdfd-48fe-8c66-e538f66688c9.png)

### Appearance:

<img width="870" alt="Screenshot 2022-01-28 at 2 15 44 PM" src="https://user-images.githubusercontent.com/37295991/151537706-1b0d98e7-4650-4443-b06b-57b9ff30b00f.png">

## Project development:

- Clone this project
- Clone docker build from [Docker build](https://github.com/Nikita3034/docker-build) and follow the instructions
- Go to the root of this project
- `cp .env.example .env`
- Set base settings
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- `php artisan storage:link`
- `composer install`
- `npm i`
- `npm run dev`

## Used technologies:

    mysql, php (Laravel), css, html
