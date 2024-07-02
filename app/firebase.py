import firebase_admin
from firebase_admin import firestore, credentials
from .config import settings


class FirebaseConnection:
    def __init__(self):
        self.cred = credentials.Certificate(settings.firebase_sdk_file_name)
        self.app = firebase_admin.initialize_app(self.cred, {
        })
        self.fs_connection = firestore.client()

    def get_firestore_connection(self):
        return self.fs_connection
