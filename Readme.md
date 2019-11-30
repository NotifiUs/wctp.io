# wctp.io

This is the repo for the public website at wctp.io

[![Netlify Status](https://api.netlify.com/api/v1/badges/c74a2aaf-f9dd-475f-80e6-f82693b18941/deploy-status)](https://app.netlify.com/sites/sad-wilson-9f8e84/deploys)

# Workflow Steps

Install composer dependencies, including `tightenco/jigsaw`

    composer install

Install npm repositories, including `@fortawesome/font-awesome-free` and `tailwindcss`

    yarn

Run Laravel Mix for front-end assets in dev environment

> This also runs jigsaw build and creates `build_local` folder

    yarn run dev

Run Laravel Mix for front-end assets in production environment

> This also runs jigsaw build and creates `build_production` folder

    yarn run production

Build jigsaw site without re-running Laravel Mix everytime

    vendor/bin/jigsaw build
    
Watch for file changes and use browsersync

    yarn run watch

# Technologies Used

* [Jigsaw](https://jigsaw.tighten.co)
* [TailwindCSS](https://tailwindcss.com)
* [Font Awesome](https://fontawesome.com)
* [unDraw](https://undraw.co)
* [Netlify](https://www.netlify.com)
