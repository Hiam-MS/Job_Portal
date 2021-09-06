CREATE TABLE IF NOT EXISTS cities (
    `id` INT,
    `country_id` INT,
    `city_name` VARCHAR(9) CHARACTER SET utf8,
    `created_at` INT,
    `updated_at` INT
);
INSERT INTO cities VALUES
    (1,1,'دمشق',NULL,NULL),
    (2,1,'ريف دمشق ',NULL,NULL),
    (3,1,'حلب',NULL,NULL),
    (4,1,'حمص',NULL,NULL),
    (5,1,'اللاذقية',NULL,NULL),
    (6,1,'حماة',NULL,NULL),
    (7,1,'طرطوس',NULL,NULL),
    (8,1,'الرقة',NULL,NULL),
    (9,1,'دير الزور',NULL,NULL),
    (10,1,'السويداء',NULL,NULL),
    (11,1,'الحسكة',NULL,NULL),
    (12,1,'درعا',NULL,NULL),
    (13,1,'ادلب',NULL,NULL),
    (14,1,'القنيطرة',NULL,NULL);
