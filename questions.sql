-- Drop table if it exists
DROP TABLE IF EXISTS `quiz_questions`;

-- Create the table for questions and answers
CREATE TABLE `quiz_questions` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `question` VARCHAR(255) NOT NULL,
  `option_1` VARCHAR(255) NOT NULL,
  `option_2` VARCHAR(255) NOT NULL,
  `option_3` VARCHAR(255) NOT NULL,
  `option_4` VARCHAR(255) NOT NULL,
  `correct_option` TINYINT(1) NOT NULL
);

-- Insert 10 random questions with four options each
INSERT INTO `quiz_questions` (`question`, `option_1`, `option_2`, `option_3`, `option_4`, `correct_option`) VALUES
('What is the capital of France?', 'Paris', 'London', 'Berlin', 'Madrid', 1),
('Which planet is known as the Red Planet?', 'Earth', 'Mars', 'Jupiter', 'Venus', 2),
('Who wrote the play "Romeo and Juliet"?', 'William Shakespeare', 'Charles Dickens', 'Leo Tolstoy', 'Mark Twain', 1),
('What is the largest ocean on Earth?', 'Pacific Ocean', 'Atlantic Ocean', 'Indian Ocean', 'Arctic Ocean', 1),
('Who painted the Mona Lisa?', 'Leonardo da Vinci', 'Vincent van Gogh', 'Pablo Picasso', 'Claude Monet', 1),
('In which year did the Titanic sink?', '1912', '1905', '1923', '1915', 1),
('What is the chemical symbol for Gold?', 'Au', 'Ag', 'Fe', 'Pb', 1),
('Who is the founder of Microsoft?', 'Bill Gates', 'Steve Jobs', 'Mark Zuckerberg', 'Larry Page', 1),
('What is the square root of 64?', '8', '6', '7', '9', 1),
('Which is the longest river in the world?', 'Nile', 'Amazon', 'Yangtze', 'Mississippi', 1);

-- End of SQL script
