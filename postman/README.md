Here is a sample **Postman README** for all the ZKTeco API routes you defined. It includes the request type, URL, a brief description, and example responses or request bodies where applicable.

---

# 📘 ZKTeco API Postman Collection Guide

### 🌐 Base URL

```
http://your-domain/api/v1
```

---

## 1. 🔍 Get Device Version

* **Method:** `GET`
* **URL:** `/version`
* **Description:** Returns the firmware version of the ZKTeco device.

**✅ Example Response:**

```json
{
  "status": "success",
  "version": "Ver 6.60 June 20 2017"
}
```

---

## 2. 💻 Get Device Platform

* **Method:** `GET`
* **URL:** `/platform`
* **Description:** Returns the platform of the ZKTeco device.

**✅ Example Response:**

```json
{
  "status": "success",
  "version": "ZEM800"
}
```

---

## 3. 🔊 Test Voice

* **Method:** `GET`
* **URL:** `/test_voice`
* **Description:** Triggers the test voice feature on the device.

**✅ Example Response:**

```json
{
  "status": "success",
  "testVoice": true
}
```

---

## 4. 🏷️ Get Device Name

* **Method:** `GET`
* **URL:** `/device_name`
* **Description:** Returns the name of the ZKTeco device.

**✅ Example Response:**

```json
{
  "status": "success",
  "deviceName": "ZKTeco U160"
}
```

---

## 5. 🔌 Shutdown Device

* **Method:** `GET`
* **URL:** `/shutdown`
* **Description:** Shuts down the device.

**✅ Example Response:**

```json
{
  "status": "success",
  "message": "The ZKTeco device has been shutdown successfully."
}
```

---

## 6. 🔄 Restart Device

* **Method:** `GET`
* **URL:** `/restart`
* **Description:** Restarts the device.

**✅ Example Response:**

```json
{
  "status": "success",
  "message": "The ZKTeco device has been restarted successfully."
}
```

---

## 7. 😴 Sleep Device

* **Method:** `GET`
* **URL:** `/sleep`
* **Description:** Puts the device to sleep.

**✅ Example Response:**

```json
{
  "status": "success",
  "message": "The ZKTeco device has been sleep successfully."
}
```

---

## 8. 💤 Resume Device

* **Method:** `GET`
* **URL:** `/resume`
* **Description:** Wakes the device from sleep.

**✅ Example Response:**

```json
{
  "status": "success",
  "message": "The ZKTeco device has been resume successfully."
}
```

---

## 9. 📋 Get All Roll Numbers

* **Method:** `GET`
* **URL:** `/zkteco/roll_no`
* **Description:** Returns a list of user roll numbers.

**✅ Example Response:**

```json
{
  "status": "success",
  "data": [
    { "roll_no": "1001" },
    { "roll_no": "1002" },
    { "roll_no": "1003" }
  ]
}
```

---

## 10. 👤 Get User by Roll Number

* **Method:** `POST`
* **URL:** `/zkteco/users`
* **Description:** Returns user details for a specific roll number.

### 🔽 Request Body (JSON)

```json
{
  "roll_no": "1001"
}
```

**✅ Example Response:**

```json
{
  "status": "success",
  "data": {
    "roll_no": "1001",
    "name": "John Doe",
    "privilege": "Admin",
    "card": "1234567890"
  }
}
```

**❌ Example Error Response:**

```json
{
  "status": "error",
  "message": "User not found for the given roll number."
}
```

---

Let me know if you want a downloadable **Postman collection file** (`.json`) for import.
