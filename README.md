<div align="center">

# 🏡 Puutarhaliike Neilikka

![GitHub pages](https://img.shields.io/badge/GitHub%20Pages-Active-success)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)

A modern website for a fictional Finnish garden and plant shop, built with pure HTML, CSS, and JavaScript.

[Live Demo](https://fimarx.github.io/Puutarhaliike-Neilikka) • [Features](#-features) • [Screenshots](#-screenshots) • [Installation](#-installation)

</div>

## 🌟 Features

### 🎨 Design Elements
- **Dynamic Title Animation**
  ```javascript
  (function titleScroller(text) {
      document.title = text;
      setTimeout(function () {
          titleScroller(text.substr(1) + text.substr(0, 1));
      }, 300);
  }(document.title + " | Kotisivu - "));
  ```
- **Custom UI Components**
  - Modern navigation bar with active state highlighting
  - Unique website favicon for brand recognition
  - Stylized custom scrollbar for enhanced user experience
  - Responsive design for all devices

### 📱 Core Functionality
- **Navigation System**
  - Intuitive menu structure
  - Smooth page transitions
  - Mobile-friendly navigation

### 🛍️ Shop Features
- **Product Display**
  - Clear product categorization
  - Detailed product information
  - Pricing display

### ⏰ Business Information
- **Working Hours**
  - Detailed schedule display
  - Seasonal opening times
  - Holiday schedules

### 📬 Contact System
- **Interactive Form**
  - User-friendly interface
  - Form validation
  - PHP backend support (currently inactive)

## 📸 Screenshots

### Homepage
![Homepage](https://github.com/FIMARx/Puutarhaliike_Neilikka/assets/69573290/c2b3bf32-384e-4ffe-8b24-6904445434a8)

### Product Categories
![Products](https://github.com/FIMARx/Puutarhaliike_Neilikka/assets/69573290/00741546-06d3-4aec-94c5-f1b17841c472)

### Shop Section
![Shop](https://github.com/FIMARx/Puutarhaliike_Neilikka/assets/69573290/62a4e4d9-327f-4267-9d1d-91e2a3fec027)

### Working Hours
![Schedule](https://github.com/FIMARx/Puutarhaliike_Neilikka/assets/69573290/14d88165-1f8b-4421-94ce-9f8896ef4315)

### Contact Form
![Contact](https://github.com/FIMARx/Puutarhaliike_Neilikka/assets/69573290/14d43af6-1217-4b71-a765-1020e60450a2)

## 🚀 Installation

### Prerequisites
- Web browser
- Code editor (VS Code, Sublime Text, etc.)
- Basic understanding of web technologies

### Setup Steps

1. Clone the repository
```bash
git clone https://github.com/FIMARx/Puutarhaliike-Neilikka.git
```

2. Navigate to project directory
```bash
cd Puutarhaliike-Neilikka
```

3. Open index.html in your browser or use a local server
```bash
# Using Python to create a simple local server
python -m http.server 8000
```

## 🛠️ Technologies

- **Frontend**
  - HTML5
  - CSS3
  - Vanilla JavaScript

- **Backend**
  - PHP (Contact form handler - currently inactive)

## 📁 Project Structure

```
Puutarhaliike-Neilikka/
├── index.html
├── css/
│   └── styles.css
├── js/
│   └── script.js
├── images/
└── assets/
    └── favicon.ico
```

## ⚠️ Known Issues

- The PHP contact form handler is currently not functional on GitHub Pages
- For full functionality, implement your own backend contact form handler

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/NewFeature`)
3. Commit your changes (`git commit -m 'Add some NewFeature'`)
4. Push to the branch (`git push origin feature/NewFeature`)
5. Open a Pull Request

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

---

<div align="center">

Developed with 🌸 by [FIMARx](https://github.com/FIMARx)

</div>
