#!/usr/bin/python
import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)

# init list with pin numbers
 
pinList = [27]

# loop through pins and set mode and state to 'low'

for i in pinList: 
    GPIO.setup(i, GPIO.OUT) 
    GPIO.output(i, GPIO.HIGH)

# time to sleep between operations in the main loop

# main loop

try:
  GPIO.output(27, GPIO.LOW)
  print "prise3 ON"

# End program cleanly with keyboard
except KeyboardInterrupt:
  print "  Quit"

