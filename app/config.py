import os
import dotenv
from pydantic.v1 import BaseSettings

dotenv.load_dotenv()


class Settings(BaseSettings):
    firebase_sdk_file_name: str = os.getenv("FIREBASE_SDK_PATH")
    firebase_api_key: str = os.getenv("FIREBASE_API_KEY")
    jalali_date_regex = r"^(13|14)\d{2}/(0[1-9]|1[0-2])/(0[1-9]|[12][0-9]|3[01])$"


settings = Settings()
