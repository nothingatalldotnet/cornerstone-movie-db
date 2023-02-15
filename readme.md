## Requirements
- Docker (desktop is fine)

## Setup
- Pull the git repo ensuring you are on the main branch
- Using the .env.example as a base, create a new .env file replacing the relevant values as appropriate. I this example it will be the `MOVIE_DB_KEY` that will need to be changed
- Run `composer install`
- Run `npm install`
- Run `npm run dev`
- Run `./vendor/bin/sail up`
- Navigate to  http://localhost