from ..firebase import FirebaseConnection

firebase_connection = FirebaseConnection()
firestore_db = firebase_connection.get_firestore_connection()
