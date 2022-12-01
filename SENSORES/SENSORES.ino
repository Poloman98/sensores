#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <DHT.h>

// Conexion a punto de acceso wifi
#define WIFI_SSID "BARONA"
#define WIFI_PASSWORD "FAMILIABARONA"

// El pin digital donde se conecta el sensor
#define DHTPIN D1

// Dependiendo del tipo de sensor
#define DHTTYPE DHT11
 
// Inicializamos el sensor DHT11
DHT dht(DHTPIN, DHTTYPE);

WiFiClient client;

String data;

void setup() {
  Serial.begin(115200);

  WiFi.begin (WIFI_SSID, WIFI_PASSWORD);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println ("");
  Serial.println ("Se conectó al wifi!");
  Serial.println(WiFi.localIP());
  
  dht.begin();
}



void loop() {

  float t = dht.readTemperature();
  int h = dht.readHumidity(); 
  
  data = "temperature="+String(t)+"&humidity="+String(h);

  Serial.println(data);

  if (client.connect("192.168.1.19",8080)) { // Preguntamos se si conectó a la IP del servidor 
    Serial.println("se conecto");
    client.println("POST /SENSORES/backend/setData.php HTTP/1.1"); 
    client.println("Host: 192.168.1.19"); // IP del servidor
    client.println("Content-Type: application/x-www-form-urlencoded"); 
    client.print("Content-Length: "); 
    client.println(data.length()); 
    client.println(); 
    client.print(data); 
  }
  else
  {
      Serial.println("No reconoce dirección del servidor");
  } 

  if (client.connected()) { 
    client.stop();  // Disconectamos del servidor
  }

  delay(60000); // Cada 1 MINUTO se envia los datos al servidor

}
