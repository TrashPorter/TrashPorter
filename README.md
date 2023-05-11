
# TrashPorter





![logo](https://github.com/TrashPorter/INF206-2023-DY1-TrashPorter/assets/92986198/244f96b7-4ba2-4151-bd70-a4ad8d8d83b1)
# Anggota

| Nama        | NPM           |
| ------------- |:-------------:|
| Aditya Rizki Ramadhan      | 2108107010002 |
| Sofia      | 2108107010006 |
| Fatiya Quzza | 2108107010042 |
| Muhammad Farhan | 2108107010050 | 

## About TrashPorter

TrashPorter merupakan website yang dibentuk untuk menyelesaikan permasalahan pengelolaan sampah di Indonesia. Awalnya website ini difokuskan hanya pada fitur antar-jemput sampah. Namun, seiring berjalannya waktu website ini terus berkembang dan penambahan fitur-fitur bermanfaat terus dilakukan secara berkala. Kami juga menyediakan hasil daur ulang sampah berupa produk bermanfaat pada website ini. Dengan berbagai fitur yang kami tawarkan, diharapkan TrashPorter dapat menjadi penghubung untuk menyelesaikan permasalahan pengelolaan sampah di Indonesia.


## Installation

pre-requisite
- Install aplikasi XAMPP untuk menghidupkan web server dan db server
- Install Composer 
- Install Node.js 

#### Clone repositori ini terlebih dahulu di dalam folder htdocs
```bash
  https://github.com/TrashPorter/INF206-2023-DY1-TrashPorter.git
```
#### Masuk ke dalam folder
```bash
  cd INF206-2023-DY1-TrashPorter
```
#### Jalankan composer Install
```bash
  composer install
```
#### Jalankan npm update
```bash
  npm update
```
#### Copy file .env.example menjadi .env
```bash
  cp .env.example .env
```
#### Aktifkan kunci menggunakan command artisan
```bash
  php artisan key:generate
```
#### Di dalam file .env ubahlah nama database menjadi TrashPorter dan sesuaikan username dengan password    
```bash
  DB_DATABASE=TrashPorter
  DB_USERNAME=<username mysql>
  DB_PASSWORD=<password>
```
#### Buatlah database menggunakan mysql/ RDBMS    
```bash
  create database TrashPorter
```
#### Install package Alert    
```bash
  composer require realrashid/sweet-alert
```
#### Migration    
```bash
  php artisan migrate:fresh --seed
```
#### Menjalankan vite assets    
```bash
  npm run dev
```
#### Buka terminal baru dan jalankan     
```bash
  php artisan serve
```
## Tech Stack

**Client:** TailwindCSS

**Server:** NodeJS



## Features

- Light/dark mode toggle
- Antar Jemput Sampah 
- Pemesanan Produk
- Katalog Harga


## 🔗 Links
[![instagram](https://img.shields.io/badge/instagram-E13067?style=for-the-badge&logo=instagram&logoColor=white)](https://www.instagram.com/trashporterid/)

