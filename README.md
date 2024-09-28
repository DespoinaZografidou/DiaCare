Εγκατάσταση εφαρμογή από το GitHub και εκτέλεση
Εδώ υπάρχει το link για το GitHub repository :  https://github.com/DespoinaZografidou/Diacare   
Στο παραπάνω link θα βρείτε, τα αρχείο της εφαρμογής μας. Ανάμεσα στα αρχεία αυτά υπάρχει κι ένα zip φάκελος με το όνομα «DATABASE» και περιλαμβάνει τα εξής:
1.	Το dump αρχείο της βάσης  
2.	Το αρχείο με τα στοιχεία σύνδεσης σε λογαριασμούς χρηστών, που δημιουργήθηκαν για δοκιμές του συστήματος.
3.	Προαπαιτούμε για την εγκατάσταση της εφαρμογής στο υπολογιστή σας είναι να είναι εγκαταστημένα τα εξής στον υπολογιστή σας :
•	Composer: https://getcomposer.org/download/ 
•	Php: https://www.php.net/downloads 
•	Node.js: https://nodejs.org/en 
1.	Για την εγκατάσταση της εφαρμογής στον υπολογιστή σας θα πρέπει να κλωνοποιήσετε το Project από το GitHub στο φάκελο root to Web Host της επιλογής σας.
•	Έπειτα θα ανοίξετε το command prompt και θα μετακινηθείτε στο root φάκελο του  Web Host σας.
	cd C:\yourwebhost\rootfile
•	Έπειτα θα κλωνοποιήσετε το repository από το GitHub με τη παρακάτω εντολή.
	git clone https://github.com/DespoinaZografidou/Diacare.git
•	Θα μετακινηθείτε στο φάκελο του project.
	cd C:\yourwebhost\rootfile\ Diacare
2.	Το επόμενο βήμα είναι η εγκατάσταση των εξαρτήσεων του Laravel με Composer και npm.
	composer install
npm install
Να δημιουργήσετε στο Web Host σας μία Βάση Δεδομένων με το όνομα «db_paperquest».
1.	Να εισάγεται το dumb αρχείο στη βάση που μόλις δημιουργήσατε.
2.	Έπειτα ανοίγοντας  το φάκελο της εφαρμογή ανοίξτε το .env αρχείο, και τροποποιήστε στις παρακάτω γραμμές του κώδικα τα στοιχείο της δικής σας βάσης που μόλις δημιουργήσατε.
 

1.	Για να λειτουργήσει η εφαρμογή Laravel, χρειάζεσαι το APP_KEY, το οποίο μπορείς να δημιουργήσεις με την παρακάτω εντολή:
	php artisan key:generate
Μετά από αυτά τα βήματα είστε έτοιμοι να τρέξετε την εφαρμογή.


2.	Για να τρέξετε την εφαρμογή αρχικά πρέπει να τρέξετε  το Local Server.
	cd C:\yourwebhost\rootfile\Diacare
php artisan serve
3.	Και τέλος να εκτελέσετε τη μεταγλώττιση των assets σε με τις παρακάτω εντολές.
	cd C:\yourwebhost\rootfile\Diacare
npm run dev




----------USERS' CREDENTIALS------------

admin1@gmail.com
1234567890

patient1@gmail.com
1234567890

patient2@gmail.com
1234567890

doctor1@gmail.com
1234567890

doctor2@gmail.com
1234567890

