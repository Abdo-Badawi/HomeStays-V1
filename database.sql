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
  traveler_id VARCHAR(255) PRIMARY KEY,
  skill TEXT,
  language_spoken TEXT,
  preferred_language VARCHAR(255),
  joined_date DATE,
  bio TEXT,
  rate FLOAT,
  location VARCHAR(255),
  created_at DATE,
  status ENUM('active', 'reported'),
  FOREIGN KEY (traveler_id) REFERENCES users (user_id)
);

-- Host Table
CREATE TABLE IF NOT EXISTS host (
  host_id VARCHAR(255) PRIMARY KEY,
  property_type ENUM('apartment', 'farm', 'house', 'other'),
  max_guests INT,
  language_spoken TEXT,
  preferred_language VARCHAR(255),
  joined_date DATE,
  bio TEXT,
  rate FLOAT,
  location VARCHAR(255),
  created_at DATE,
  status ENUM('active', 'reported'),
  FOREIGN KEY (host_id) REFERENCES users (user_id)
);

-- Opportunity Table
CREATE TABLE IF NOT EXISTS opportunity (
  opportunity_id VARCHAR(255) PRIMARY KEY,
  opportunity_photo VARCHAR(255),
  title VARCHAR(255),
  description TEXT,
  location VARCHAR(255),
  start_date DATE,
  end_date DATE,
  category ENUM('farming', 'teaching', 'hospitality', 'other'),
  host_id VARCHAR(255),
  status ENUM('open', 'closed', 'cancelled'),
  created_at DATE,
  requirements TEXT,
  FOREIGN KEY (host_id) REFERENCES users (user_id)
);

-- Application Table
CREATE TABLE IF NOT EXISTS application (
  application_id VARCHAR(255) PRIMARY KEY,
  opportunity_id VARCHAR(255),
  traveler_id VARCHAR(255),
  status ENUM('pending', 'accepted', 'rejected'),
  applied_date DATE,
  FOREIGN KEY (opportunity_id) REFERENCES opportunity (opportunity_id),
  FOREIGN KEY (traveler_id) REFERENCES users (user_id)
);

-- Card Table
CREATE TABLE IF NOT EXISTS card (
  card_number VARCHAR(255) PRIMARY KEY,
  expiry_date DATE,
  cvv VARCHAR(255),
  card_holder_name VARCHAR(255),
  billing_address VARCHAR(255),
  traveler_id VARCHAR(255) UNIQUE,
  FOREIGN KEY (traveler_id) REFERENCES users (user_id)
);

-- Fee Transaction Table
CREATE TABLE IF NOT EXISTS fee_transaction (
  fee_id VARCHAR(255) PRIMARY KEY,
  traveler_id VARCHAR(255),
  payment_method ENUM('credit_card', 'paypal', 'bank_transfer'),
  amount FLOAT,
  date DATE,
  status ENUM('pending', 'completed', 'failed'),
  FOREIGN KEY (traveler_id) REFERENCES users (user_id)
);

-- Review Table
CREATE TABLE IF NOT EXISTS review (
  review_id VARCHAR(255) PRIMARY KEY,
  sender_id VARCHAR(255),
  receiver_id VARCHAR(255),
  created_at DATE,
  opportunity_id VARCHAR(255),
  rating FLOAT,
  comment TEXT,
  is_reported BOOLEAN,
  FOREIGN KEY (sender_id) REFERENCES users (user_id),
  FOREIGN KEY (receiver_id) REFERENCES users (user_id),
  FOREIGN KEY (opportunity_id) REFERENCES opportunity (opportunity_id)
);

-- Notification Table
CREATE TABLE IF NOT EXISTS notification (
  notification_id VARCHAR(255) PRIMARY KEY,
  receiver_id VARCHAR(255),
  content TEXT,
  timestamp DATE,
  FOREIGN KEY (receiver_id) REFERENCES users (user_id)
);

-- Message Table
CREATE TABLE IF NOT EXISTS message (
  message_id VARCHAR(255) PRIMARY KEY,
  sender_id VARCHAR(255),
  receiver_id VARCHAR(255),
  content TEXT,
  timestamp DATE,
  status VARCHAR(255),
  FOREIGN KEY (sender_id) REFERENCES users (user_id),
  FOREIGN KEY (receiver_id) REFERENCES users (user_id)
);

-- Report Table
CREATE TABLE IF NOT EXISTS report (
  report_id VARCHAR(255) PRIMARY KEY,
  reported_by_id VARCHAR(255),
  target_user_id VARCHAR(255),
  report_content TEXT,
  status ENUM('open', 'reviewed', 'resolved'),
  report_type ENUM('user', 'opportunity', 'message'),
  admin_response TEXT,
  FOREIGN KEY (reported_by_id) REFERENCES users (user_id),
  FOREIGN KEY (target_user_id) REFERENCES users (user_id)
);

-- Support Content Table
CREATE TABLE IF NOT EXISTS support_content (
  title VARCHAR(255) PRIMARY KEY,
  content TEXT,
  category ENUM('account', 'safety', 'opportunity', 'other'),
  status ENUM('active', 'archived'),
  created_at DATE,
  last_updated DATE
);
