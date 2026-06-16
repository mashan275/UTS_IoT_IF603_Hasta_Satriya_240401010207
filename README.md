# 🏠 Smart Home IoT Simulation

## 📌 Deskripsi Proyek

Project ini merupakan simulasi Smart Home berbasis Internet of Things (IoT) yang dibuat menggunakan Cisco Packet Tracer.

Sistem Smart Home terdiri dari beberapa perangkat IoT yang terhubung ke Home Gateway dan Registration Server sehingga dapat dimonitor dan dikontrol melalui dashboard IoT Server.

Selain dashboard bawaan Cisco Packet Tracer, proyek ini juga dilengkapi dengan dashboard web sederhana sebagai antarmuka monitoring dan informasi sistem.

---

## 👨‍💻 Identitas Mahasiswa

**Nama :** Hasta Satriya

**NIM :** 240401010207

**Program Studi :** Informatika

**Mata Kuliah :** Internet of Things

**Universitas :** Universitas Siber Asia

**Dosen Pengampu :**
Muhammad Ikhwani Saputra, S.Kom., M.Kom

---

# 🎯 Tujuan Proyek

Tujuan dari proyek ini adalah:

- Membangun simulasi Smart Home berbasis IoT.
- Mengimplementasikan Home Gateway sebagai pusat komunikasi perangkat.
- Mengimplementasikan Registration Server untuk registrasi dan monitoring perangkat.
- Menghubungkan berbagai perangkat IoT ke dalam satu jaringan.
- Melakukan monitoring dan kontrol perangkat melalui dashboard IoT.

---

# 🏗️ Arsitektur Sistem

```text
IoT Devices
     │
     ▼
Home Gateway
     │
     ▼
Registration Server
     │
     ▼
User (Laptop / Smartphone)
Peran Komponen
IoT Devices

Perangkat yang digunakan:

Light
Ceiling Fan
Door
Motion Detector
Smoke Detector

Fungsi:

Mengirim data ke sistem.
Menerima perintah kontrol.
Menjalankan fungsi otomatisasi.
Home Gateway

Device:

DLC100

Fungsi:

Menghubungkan seluruh perangkat IoT.
Menyediakan jaringan wireless.
Mengelola komunikasi perangkat dan server.
Registration Server

Device: server0
Fungsi:

Registrasi perangkat IoT.
Menyimpan akun pengguna.
Menyediakan dashboard monitoring dan kontrol.
User

Device:

Laptop0
Smartphone0

Fungsi:

Monitoring perangkat.
Mengontrol perangkat.
Mengakses dashboard IoT.
🌐 Konfigurasi Jaringan
Home Gateway
Parameter	Nilai
Device	DLC100
IP Address	192.168.25.1
SSID	Smarthome
Security	WPA2-PSK
Password	12345678
Registration Server
Parameter	Nilai
Device	Server0
IP Address	192.168.25.2
Subnet Mask	255.255.255.0
Gateway	192.168.25.1
Service
HTTP ON
HTTPS ON
IoT Service ON
Registration Server ON
👤 Akun Administrator
Username : admin
Password : admin
📡 Daftar Perangkat IoT
Device	IP Address
Home Gateway	192.168.25.1
Server0	192.168.25.2
Laptop0	192.168.25.103
Smartphone0	192.168.25.110
Light (IoT0)	192.168.25.102
Ceiling Fan (IoT1)	192.168.25.100
Door (IoT2)	192.168.25.104
Motion Detector (IoT3)	192.168.25.108
Smoke Detector (IoT4)	192.168.25.106
🔧 Fitur Sistem
Monitoring
Monitoring status perangkat.
Monitoring koneksi perangkat.
Monitoring jaringan IoT.
Control Device

Perangkat yang dapat dikontrol melalui dashboard IoT bawaan Packet Tracer:

Light
Off
Dim
On
Ceiling Fan
Off
Low
High
Door
Lock
Unlock
Smoke Detector
Monitoring Alarm
Motion Detector
Monitoring Gerakan
📋 Hasil Pengujian
Pengujian	Status
Wireless Connection	Berhasil
Registration Server	Berhasil
Login Administrator	Berhasil
Device Registration	Berhasil
Device Monitoring	Berhasil
Device Control	Berhasil
⚠️ Keterbatasan Sistem

Dashboard web custom yang dibuat pada proyek ini berfungsi sebagai:

Portal Monitoring
Portal Informasi Sistem
Dashboard Administrasi

Sedangkan kontrol perangkat IoT secara langsung dilakukan melalui Dashboard IoT Server bawaan Cisco Packet Tracer.

Hal ini karena Cisco Packet Tracer tidak menyediakan API untuk menghubungkan halaman web custom dengan perangkat IoT secara langsung.

✅ Kesimpulan

Simulasi Smart Home berbasis Internet of Things berhasil dibangun menggunakan Cisco Packet Tracer.

Home Gateway DLC100 berfungsi sebagai pusat komunikasi perangkat IoT, sedangkan Registration Server digunakan untuk registrasi, monitoring, dan pengelolaan perangkat.

Seluruh perangkat berhasil terhubung ke jaringan dan dapat dimonitor serta dikontrol melalui dashboard IoT Server.

📚 Tools yang Digunakan
Cisco Packet Tracer
HTML
CSS
PHP (Dashboard Web)
IoT Registration Server
Home Gateway DLC100
📄 Lisensi

Project ini dibuat untuk keperluan pembelajaran dan tugas Ujian Tengah Semester (UTS) Mata Kuliah Internet of Things.
