#include <SPI.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClientSecure.h>
#include <DHT.h>
#include <ArduinoJson.h>  // Include the ArduinoJSON library

const char *ssid = "vivo";
const char *password = "dhaniaaa123";
int keyIndex = 0;

int status = WL_IDLE_STATUS;

// Initialize sensor that uses digital pins 13 and 12.
const byte triggerPin = 13;
const byte echoPin = 12;
const byte dhtPin = D1;
#define RAIN_SENSOR_PIN A0

DHT dht(dhtPin, DHT11);

WiFiClient client;

// server address:
char server[] = "103.85.60.83";

unsigned long lastConnectionTime = 0;
const unsigned long postingInterval = 4L * 1000L;

void setup() {
    Serial.begin(9600);
    WiFi.mode(WIFI_STA);
    WiFi.begin(ssid, password);
    Serial.println("");

    Serial.print("Connecting");
    while (WiFi.status() != WL_CONNECTED) {
        delay(500);
        Serial.print(".");
    }
    printWifiStatus();
}

void loop() {
    float temperature = dht.readTemperature();
    float humidity = dht.readHumidity();
    int rainValue = analogRead(RAIN_SENSOR_PIN);
    Serial.print("Rain Sensor Value: ");
    Serial.println(rainValue);
    Serial.println("Temperature: " + String(temperature) + " °C");
    Serial.println("Humidity: " + String(humidity) + " %");

    if (millis() - lastConnectionTime > postingInterval) {
        httpRequest(temperature, humidity, rainValue);
    }
    delay(3000);
}

void httpRequest(float temperature, float humidity, float rainValue) {
    client.stop();

    if (client.connect(server, 80)) {  // Use port 80 for HTTP
        Serial.println("connecting...");

        // Create a JSON object
        DynamicJsonDocument jsonDocument(256);  // Adjust the size based on your data
        jsonDocument["nilai1"] = rainValue;
        jsonDocument["nilai2"] = temperature;

        // Serialize the JSON object
        String jsonString;
        serializeJson(jsonDocument, jsonString);

        // Make a POST request with the JSON payload
        client.println("POST /IOT5AKEL2/index.php/welcome/updatedata/5AKEL2/ HTTP/1.1");
        client.println("Host: 103.85.60.83");
        client.println("User-Agent: ArduinoWiFi/1.1");
        client.println("Content-Type: application/json");
        client.print("Content-Length: ");
        client.println(jsonString.length());
        client.println("Connection: close");
        client.println();
        client.println(jsonString);
        lastConnectionTime = millis();
    } else {
        Serial.println("connection failed");
    }
}

void printWifiStatus() {
    Serial.print("SSID: ");
    Serial.println(WiFi.SSID());
    IPAddress ip = WiFi.localIP();
    Serial.print("IP Address: ");
    Serial.println(ip);
    long rssi = WiFi.RSSI();
    Serial.print("Signal Strength (RSSI): ");
    Serial.print(rssi);
    Serial.println(" dBm");
}
