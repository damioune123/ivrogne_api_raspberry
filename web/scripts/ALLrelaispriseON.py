
#!/usr/bin/python
import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)

# init list with pin numbers

pinList = [18, 27, 22, 17, 23, 24, 26, 20, 12, 13]

# loop through pins and set mode and state to 'low'

for i in pinList: 
    GPIO.setup(i, GPIO.OUT) 
    GPIO.output(i, GPIO.HIGH)

# time to sleep between operations in the main loop

SleepTimeL = 0.5

# main loop

try:
  GPIO.output(18, GPIO.LOW)
  print "ONE"
  time.sleep(SleepTimeL); 
  GPIO.output(17, GPIO.LOW)
  print "TWO"
  time.sleep(SleepTimeL);  
  GPIO.output(22, GPIO.LOW)
  print "THREE"
  time.sleep(SleepTimeL);
  GPIO.output(27, GPIO.LOW)
  print "FOUR"
  time.sleep(SleepTimeL);
  GPIO.output(23, GPIO.LOW)
  print "FIVE"
  time.sleep(SleepTimeL);
  GPIO.output(24, GPIO.LOW)
  print "SIX"
  time.sleep(SleepTimeL);
  GPIO.output(13, GPIO.LOW)
  print "SEVEN"
  time.sleep(SleepTimeL);
  GPIO.output(12, GPIO.LOW)
  print "EIGHT"
  time.sleep(SleepTimeL);
  print "ALL ON"

# End program cleanly with keyboard
except KeyboardInterrupt:
  print "  Quit "
