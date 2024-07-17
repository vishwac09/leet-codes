echo "------PHP------";
composer run tests
composer run pretty:php

echo "------JS------";
npm run lint
npm run tests
npm run pretty:js
