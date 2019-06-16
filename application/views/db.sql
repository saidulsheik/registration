
CREATE TABLE division (
 	DivisionID int NOT NULL AUTO_INCREMENT,
    DivisionName varchar(255) NOT NULL,
    PRIMARY KEY (DivisionID)
);

CREATE TABLE district(
	DistrictId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	DistrictName varchar(255) NOT NULL,
	DivisionID int,
	FOREIGN KEY(DivisionID) REFERENCES division(DivisionID)
)

CREATE TABLE upazila(
	UpazilaId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	UpazilaName varchar(255) NOT NULL,
	DistrictId int,
	FOREIGN KEY(DistrictId) REFERENCES district(DistrictId)
)

CREATE TABLE exam(
	ExamId int(11) not NULL AUTO_INCREMENT PRIMARY KEY,
	ExamName varchar(100) NOT NULL
)

CREATE TABLE board(
	BoardId int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	BoardName varchar(100) NOT NULL
)
CREATE TABLE university(
	Universityid int(11) not NULL AUTO_INCREMENT PRIMARY KEY,
	UniversityName varchar(100) NOT NULL
)


CREATE TABLE university(
	UniversityId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	UniversityName varchar(100) not NULL
)

CREATE TABLE applicanttraining(
	TrainingId int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	TrainingName varchar(250) NOT NULL,
	TrainingDetails varchar(250) NOT NULL,
	ApplicantId int,
	FOREIGN KEY(ApplicantId) REFERENCES applicant(ApplicantId)
)

CREATE TABLE applicant(
	ApplicantId int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ApplicantName varchar(250) NOT NULL,
	EmailAddress varchar(250) NOT NULL,
	DivisionID int,
	DistrictId int,
	UpazilaId int,
	AddressDetails varchar(250) NOT NULL,
	Language varchar(250) NOT NULL,
	Photo varchar(250) NOT NULL,
	Attachment varchar(250) NOT NULL,
	FOREIGN KEY(DivisionID) REFERENCES division(DivisionID),
	FOREIGN KEY(DistrictId) REFERENCES district(DistrictId),
	FOREIGN KEY(UpazilaId) REFERENCES upazila(UpazilaId)
)

CREATE TABLE applicanteducation(
	EducationId int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ExamId int,
	Universityid int,
	BoardId int,
	ApplicantId int,
	FOREIGN KEY(ExamId) REFERENCES exam(ExamId),
	FOREIGN KEY(Universityid) REFERENCES university(Universityid),
	FOREIGN KEY(BoardId) REFERENCES board(BoardId),
	FOREIGN KEY(ApplicantId) REFERENCES applicant(ApplicantId)
)
