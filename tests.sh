#!/bin/bash

./vendor/bin/phpspec r;
EXIT_CODE=$?;

if [ $EXIT_CODE -eq 0 ]
then
  afplay audio/checkout-successful.mp3;
else
  afplay audio/unexpected-item-in-bagging-area.mp3;
fi

