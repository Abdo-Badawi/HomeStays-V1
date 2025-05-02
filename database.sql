-- Base User Table
CREATE TABLE IF NOT EXISTS user_account (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  user_id VARCHAR(255) NOT NULL UNIQUE,
  national_id VARCHAR(255) UNIQUE,
  user_type VARCHAR(255),
  password VARCHAR(255),
  last_login TIMESTAMP,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  profile_picture VARCHAR(255) -- Store file path instead of binary data
);

-- Platform Member Table
CREATE TABLE IF NOT EXISTS platform_member (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  user_id VARCHAR(255) NOT NULL,
  preferred_language VARCHAR(255),
  joined_date DATE,
  bio TEXT,
  rate DOUBLE,
  location VARCHAR(255),
  email VARCHAR(255) UNIQUE,
  phone_number VARCHAR(255) UNIQUE,
  created_at DATE,
  status VARCHAR(255),
  FOREIGN KEY (user_id) REFERENCES user_account (user_id)
);

-- Traveler Table
CREATE TABLE IF NOT EXISTS traveler (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  traveler_id VARCHAR(255) NOT NULL UNIQUE,
  FOREIGN KEY (traveler_id) REFERENCES platform_member (user_id)
);

-- Traveler Skills Table
CREATE TABLE IF NOT EXISTS traveler_skill (
  traveler_id VARCHAR(255),
  skill VARCHAR(255),
  PRIMARY KEY (traveler_id, skill),
  FOREIGN KEY (traveler_id) REFERENCES traveler (traveler_id)
);

-- Traveler Languages Table
CREATE TABLE IF NOT EXISTS traveler_language (
  traveler_id VARCHAR(255),
  language VARCHAR(255),
  PRIMARY KEY (traveler_id, language),
  FOREIGN KEY (traveler_id) REFERENCES traveler (traveler_id)
);

-- Host Table
CREATE TABLE IF NOT EXISTS host (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  host_id VARCHAR(255) NOT NULL,
  property_type VARCHAR(255),
  max_guests INT,
  FOREIGN KEY (host_id) REFERENCES platform_member (user_id)
);

-- Opportunity Table
CREATE TABLE IF NOT EXISTS opportunity (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  opportunity_id VARCHAR(255) NOT NULL UNIQUE,
  opportunity_photo VARCHAR(255), -- Store file path instead of binary data
  title VARCHAR(255),
  description TEXT,
  location VARCHAR(255),
  start_date DATE,
  end_date DATE,
  category VARCHAR(255),
  host_id VARCHAR(255),
  status VARCHAR(255),
  created_at DATE,
  requirements TEXT,
  FOREIGN KEY (host_id) REFERENCES platform_member (user_id)
);

-- Application Table
CREATE TABLE IF NOT EXISTS application (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  application_id VARCHAR(255) NOT NULL,
  opportunity_id VARCHAR(255),
  traveler_id VARCHAR(255),
  status VARCHAR(255),
  applied_date DATE,
  FOREIGN KEY (opportunity_id) REFERENCES opportunity (opportunity_id),
  FOREIGN KEY (traveler_id) REFERENCES platform_member (user_id)
);

-- Card Table
CREATE TABLE IF NOT EXISTS card (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  card_number VARCHAR(255) NOT NULL,
  expiry_date DATE,
  cvv VARCHAR(255),
  card_holder_name VARCHAR(255),
  billing_address VARCHAR(255),
  traveler_id VARCHAR(255) UNIQUE,
  FOREIGN KEY (traveler_id) REFERENCES platform_member (user_id)
);

-- Fee Transaction Table
CREATE TABLE IF NOT EXISTS fee_transaction (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  fee_id VARCHAR(255) NOT NULL,
  traveler_id VARCHAR(255),
  payment_method VARCHAR(255),
  amount DOUBLE,
  date DATE,
  status VARCHAR(255),
  FOREIGN KEY (traveler_id) REFERENCES platform_member (user_id)
);

-- Review Table
CREATE TABLE IF NOT EXISTS review (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  review_id VARCHAR(255) NOT NULL,
  sender_id VARCHAR(255),
  receiver_id VARCHAR(255),
  created_at DATE,
  opportunity_id VARCHAR(255),
  rating DOUBLE,
  comment TEXT,
  is_reported BOOLEAN,
  FOREIGN KEY (sender_id) REFERENCES user_account (user_id),
  FOREIGN KEY (receiver_id) REFERENCES user_account (user_id),
  FOREIGN KEY (opportunity_id) REFERENCES opportunity (opportunity_id)
);

-- Notification Table
CREATE TABLE IF NOT EXISTS notification (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  notification_id VARCHAR(255) NOT NULL,
  receiver_id VARCHAR(255),
  content TEXT,
  timestamp DATE,
  FOREIGN KEY (receiver_id) REFERENCES user_account (user_id)
);

-- Message Table
CREATE TABLE IF NOT EXISTS message (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  message_id VARCHAR(255) NOT NULL,
  sender_id VARCHAR(255),
  receiver_id VARCHAR(255),
  content TEXT,
  timestamp DATE,
  status VARCHAR(255),
  FOREIGN KEY (sender_id) REFERENCES user_account (user_id),
  FOREIGN KEY (receiver_id) REFERENCES user_account (user_id)
);

-- Report Table
CREATE TABLE IF NOT EXISTS report (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  report_id VARCHAR(255) NOT NULL,
  reported_by_id VARCHAR(255),
  target_user_id VARCHAR(255),
  report_content TEXT,
  status VARCHAR(255),
  report_type VARCHAR(255),
  admin_response TEXT,
  FOREIGN KEY (reported_by_id) REFERENCES user_account (user_id),
  FOREIGN KEY (target_user_id) REFERENCES user_account (user_id)
);

-- Support Content Table
CREATE TABLE IF NOT EXISTS support_content (
  title VARCHAR(255) PRIMARY KEY,
  content TEXT,
  category VARCHAR(255),
  status VARCHAR(255),
  created_at DATE,
  last_updated DATE
);