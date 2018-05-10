volatile int NbTopsFan; //measuring the rising edges of the signal
volatile int NbTopsFan1; //measuring the rising edges of the signal
volatile int NbTopsFan2; //measuring the rising edges of the signal
int Calc1;
int Calc2;
int Calc3;                               
int hallsensor1 = 2;   //The pin location of the sensor
int hallsensor2 = 3;   //The pin location of the sensor
int hallsensor3 = 18;   //The pin location of the sensor


void rpm ()     //This is the function that the interupt calls 
{ 
 NbTopsFan++;  //This function measures the rising and falling edge of the hall effect sensors signal
} 
void rpm1 ()     //This is the function that the interupt calls 
{ 
 NbTopsFan1++;  //This function measures the rising and falling edge of the hall effect sensors signal
} 
void rpm2 ()     //This is the function that the interupt calls 
{ 
 NbTopsFan2++;  //This function measures the rising and falling edge of the hall effect sensors signal
} 

// The setup() method runs once, when the sketch starts
void setup() //
{ 
 pinMode(hallsensor1, INPUT); //initializes digital pin 2 as an input
 pinMode(hallsensor2, INPUT); //initializes digital pin 3 as an input
 pinMode(hallsensor3, INPUT); //initializes digital pin 4 as an input
 Serial.begin(9600); //This is the setup function where the serial port is initialised,

 attachInterrupt(digitalPinToInterrupt(hallsensor1), rpm, RISING); //and the interrupt is attached
 attachInterrupt(digitalPinToInterrupt(hallsensor2), rpm1, RISING); //and the interrupt is attached
 attachInterrupt(digitalPinToInterrupt(hallsensor3), rpm2, RISING); //and the interrupt is attached
} 
// the loop() method runs over and over again,
// as long as the Arduino has power
void loop ()    
{
 NbTopsFan = 0;      //Set NbTops to 0 ready for calculations
 NbTopsFan1 = 0;      //Set NbTops to 0 ready for calculations
 NbTopsFan2 = 0;      //Set NbTops to 0 ready for calculations
 sei();            //Enables interrupts
 delay (3000);      //Wait 1 second
 cli();            //Disable interrupts
 Calc1 = (NbTopsFan * 60 / 7.5); //(Pulse frequency x 60) / 7.5Q, = flow rate in L/hour 
 Calc2 = (NbTopsFan1 * 60 / 7.5); //(Pulse frequency x 60) / 7.5Q, = flow rate in L/hour 
 Calc3 = (NbTopsFan2 * 60 / 7.5); //(Pulse frequency x 60) / 7.5Q, = flow rate in L/hour
 


 Serial.print (Calc1, DEC); //Prints the number calculated above
 Serial.print ("  ,  "); //Prints the number calculated above
 Serial.print (Calc2, DEC); //Prints the number calculated above
 Serial.print ("  ,  "); //Prints the number calculated above
 Serial.print (Calc3, DEC); //Prints the number calculated above
 Serial.print (" L/hour\r\n"); //Prints "L/hour" and returns a  new line
}
// if (ArduinoSerial.available () > 0)
//  {
//        val = ArduinoSerial.readStringUntil('\n'); //อ่านข้อความจาก Arduino
//        Serial.println(val);
//        point = val.substring(1,2);
//        state = val.substring(3,4);
//        Serial.println("point = " + point + "state = " + state);
//        cpoint = point.toInt();
//        cstate = state.toInt();
//
//        if( cpoint == 1 ) {
//          //// CONDITION ////
//        }
//        if( cpoint == 2 ) {
//          //// CONDITION ////
//        }
//        if( cpoint == 3 ) {
//          //// CONDITION ////
//        }
//  }

//}
