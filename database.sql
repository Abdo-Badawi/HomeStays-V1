-- Users Table
CREATE TABLE IF NOT EXISTS users (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  user_id VARCHAR(255) NOT NULL UNIQUE,
  national_id VARCHAR(255) UNIQUE,
  user_type ENUM('host', 'traveler', 'admin'),
  password VARCHAR(255),
  email VARCHAR(255) UNIQUE,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  phone_number VARCHAR(255) UNIQUE,
  profile_picture VARCHAR(255),
  last_login TIMESTAMP
);

-- Traveler Table
CREATE TABLE IF NOT EXISTS traveler (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  traveler_id VARCHAR(255) NOT NULL UNIQUE,
  skill TEXT,
  language_spoken TEXT,
  preferred_language VARCHAR(255),
  joined_date DATE,
  bio TEXT,
  rate FLOAT,
  location VARCHAR(255),
  created_at DATE,
  status ENUM('active', 'reported'),
  FOREIGN KEY (traveler_id) REFERENCES users(user_id)
);

-- Host Table
CREATE TABLE IF NOT EXISTS host (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  host_id VARCHAR(255) NOT NULL UNIQUE,
  property_type ENUM('teaching', 'farming', 'cooking', 'childcare'),
  preferred_language VARCHAR(255),
  joined_date DATE,
  bio TEXT,
  rate FLOAT,
  location VARCHAR(255),
  status ENUM('active', 'reported'),
  FOREIGN KEY (host_id) REFERENCES users(user_id)
);

-- Opportunity Table
CREATE TABLE IF NOT EXISTS opportunity (
  opportunity_id BIGINT PRIMARY KEY AUTO_INCREMENT,
  opportunity_photo VARCHAR(255),
  title VARCHAR(255),
  description TEXT,
  location VARCHAR(255),
  start_date DATE,
  end_date DATE,
  category ENUM('teaching', 'farming', 'cooking', 'childcare'),
  host_id VARCHAR(255),
  status ENUM('open', 'closed', 'cancelled'),
  created_at TIMESTAMP,
  requirements TEXT,
  FOREIGN KEY (host_id) REFERENCES users(user_id)
);

-- Application Table
CREATE TABLE IF NOT EXISTS application (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  application_id VARCHAR(255) NOT NULL UNIQUE,
  opportunity_id BIGINT,
  traveler_id VARCHAR(255),
  status ENUM('pending', 'accepted', 'rejected'),
  applied_date DATE,
  FOREIGN KEY (opportunity_id) REFERENCES opportunity(opportunity_id),
  FOREIGN KEY (traveler_id) REFERENCES users(user_id)
);

-- Card Table
CREATE TABLE IF NOT EXISTS card (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  card_number VARCHAR(255) NOT NULL UNIQUE,
  expiry_date DATE,
  cvv VARCHAR(255),
  card_holder_name VARCHAR(255),
  billing_address VARCHAR(255),
  traveler_id VARCHAR(255) UNIQUE,
  FOREIGN KEY (traveler_id) REFERENCES users(user_id)
);

-- Fee Transaction Table
CREATE TABLE IF NOT EXISTS fee_transaction (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  fee_id VARCHAR(255) NOT NULL UNIQUE,
  traveler_id VARCHAR(255),
  payment_method ENUM('credit_card', 'paypal', 'bank_transfer'),
  amount FLOAT,
  date DATE,
  status ENUM('pending', 'completed', 'failed'),
  FOREIGN KEY (traveler_id) REFERENCES users(user_id)
);

-- Review Table
CREATE TABLE IF NOT EXISTS review (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  review_id VARCHAR(255) NOT NULL UNIQUE,
  sender_id VARCHAR(255),
  receiver_id VARCHAR(255),
  created_at DATE,
  opportunity_id BIGINT,
  rating FLOAT,
  comment TEXT,
  is_reported BOOLEAN,
  FOREIGN KEY (sender_id) REFERENCES users(user_id),
  FOREIGN KEY (receiver_id) REFERENCES users(user_id),
  FOREIGN KEY (opportunity_id) REFERENCES opportunity(opportunity_id)
);

-- Notification Table
CREATE TABLE IF NOT EXISTS notification (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  notification_id VARCHAR(255) NOT NULL UNIQUE,
  receiver_id VARCHAR(255),
  content TEXT,
  timestamp DATE,
  FOREIGN KEY (receiver_id) REFERENCES users(user_id)
);

-- Message Table
CREATE TABLE IF NOT EXISTS message (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  message_id VARCHAR(255) NOT NULL UNIQUE,
  sender_id VARCHAR(255),
  receiver_id VARCHAR(255),
  content TEXT,
  timestamp DATE,
  status VARCHAR(255),
  FOREIGN KEY (sender_id) REFERENCES users(user_id),
  FOREIGN KEY (receiver_id) REFERENCES users(user_id)
);

-- Report Table
CREATE TABLE IF NOT EXISTS report (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  report_id VARCHAR(255) NOT NULL UNIQUE,
  reported_by_id VARCHAR(255),
  target_user_id VARCHAR(255),
  report_content TEXT,
  status ENUM('open', 'reviewed', 'resolved'),
  report_type ENUM('user', 'opportunity', 'message'),
  admin_response TEXT,
  FOREIGN KEY (reported_by_id) REFERENCES users(user_id),
  FOREIGN KEY (target_user_id) REFERENCES users(user_id)
);

-- Support Content Table
CREATE TABLE IF NOT EXISTS support_content (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL UNIQUE,
  content TEXT,
  category ENUM('account', 'safety', 'opportunity', 'other'),
  status ENUM('active', 'archived'),
  created_at DATE,
  last_updated DATE
);
