#Blue Button for reseting the server/ pull from gitlab
#Red Button for PowerOff Raspberry Pi
import RPi.GPIO as GPIO
import time
import os


GPIO.setmode(GPIO.BCM)

#Pins set for the buttons
shutdownPin = 27
resetPin = 22

GPIO.setup(shutdownPin, GPIO.IN, pull_up_down=GPIO.PUD_UP)
GPIO.setup(resetPin, GPIO.IN, pull_up_down=GPIO.PUD_UP)

while True:
	#gives boolean values to the input of the buttons
	input_state1 = GPIO.input(shutdownPin)
	input_state2 = GPIO.input(resetPin)

	#Turning off Raspberry Pi
	if input_state1 == False:
		print('Shutting Down Raspberry Pi')
		os.system("sudo shutdown -h now")
		time.sleep(0.2)
	#Pulling from Git and Restarting Server
	if input_state2 == False:
		print('Reset Apache2 Server')
		os.system("sudo service apache2 restart")
		time.sleep(0.2)
