#include <SoftwareSerial.h>
SoftwareSerial wif(0, 1);//rx , tx
int gas,temp;

              
void setup() 
{
  Serial.begin(9600);
  wif.begin(9600);
  pinMode(A1,INPUT);
  pinMode(A2,INPUT);
}

void loop() 
{
  delay(2000);
  gas=analogRead(A1);
  temp=analogRead(A2);
 temp=map(temp,0,1023,0,500);
 gas=map(gas,0,1023,0,500);

  String s="field1="+String(temp)+"&field2="+String(gas);

  Serial.println(s);
 delay(10000);
  wif.println(s);
  
  }
