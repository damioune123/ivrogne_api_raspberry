#!/usr/bin/python
import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)

# init list with pin numbers

pinList = [16, 26, 19]

# loop through pins and set mode and state to 'low'

for i in pinList: 
    GPIO.setup(i, GPIO.OUT) 
    GPIO.output(i, GPIO.HIGH)

# time to sleep between operations in the main loop

SleepTimeL=10

# main loop
GPIO.output(19,GPIO.LOW)
GPIO.output(26,GPIO.LOW)
try:
  GPIO.output(19, GPIO.LOW)
  print "Ouverture frigo" 
  GPIO.output(26, GPIO.LOW)
  print "Petit frigo"
  time.sleep(SleepTimeL);  
  print "Good bye!"
  GPIO.cleanup()

# End program cleanly with keyboard
except KeyboardInterrupt:
  print "  Quit"

  # Reset GPIO settings
  GPIO.cleanup()

