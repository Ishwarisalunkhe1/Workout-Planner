# 🏋️‍♀️ Workout-Planner

**Workout-Planner** is an open-source, beginner-friendly project created by college students passionate about health, technology, and collaboration. Our aim is to build a virtual workout trainer that helps users stay consistent, motivated, and informed throughout their fitness journey.

---

## 🌟 Project Vision

This planner is designed to:

- Provide a **structured weekly workout roadmap** to guide users through their fitness journey
- Support **posture correction and recovery routines** to promote safe and effective workouts
- Offer **interactive features** such as timers, audio cues, and motivational quotes to keep users engaged
- Serve as an educational platform for developers looking to explore **full-stack web development**

---

## 🛠️ Tech Stack

| Layer     | Technologies Used      |
|-----------|------------------------|
| Frontend  | HTML5, CSS3, JavaScript|
| Backend   | PHP                    |
| Database  | MySQL                  |

---

## 👩‍💻 Who Can Contribute?

Everyone is welcome to contribute! Whether you are a beginner or an experienced developer, there’s a place for you to make an impact. Here are some ways to get involved:

- Improve the **UI/UX design** for better usability and appeal
- Add **new workout modules** or enhance existing ones
- Fix bugs or **optimize code** for improved performance
- Enhance backend logic, add **security improvements** or refactor PHP code
- Write **documentation**, tutorials, or guides to support users and other developers

---

## 📋 Database Setup

Before running the application, ensure the database is properly set up. Use the following SQL queries:

CREATE DATABASE IF NOT EXISTS lso_db;
USE lso_db;

CREATE TABLE IF NOT EXISTS users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
email VARCHAR(150) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


---

## 🚀 Getting Started

### Prerequisites

- You need to have XAMPP or a similar local web server environment installed on your machine.
- Ensure MySQL is running.

### Installation Steps

1. Clone the repository:
git clone https://github.com/your-repo/workout-planner.git

2. Move the project folder to your local server directory:
C:/xampp/htdocs/project

3. Import the database by running the SQL queries mentioned above using phpMyAdmin or MySQL CLI.

4. Open your browser and navigate to:
http://localhost/project/


---

## 🤝 Code of Conduct

Please adhere to a respectful and collaborative environment. Positive and constructive feedback is encouraged.

---

Thank you for your interest in contributing to Workout-Planner! Let's build a healthier future together. 💪








