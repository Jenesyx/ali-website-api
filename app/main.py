from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware

app = FastAPI(version='1.0.0', title='Jenesyx Website', description='API for alijenesyx.me', redoc_url=None)

origins = [
    "*"
]

app.add_middleware(
    CORSMiddleware,
    allow_origins=origins,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)


@app.get("/")
def root():
    return {'message': 'Application is up and running'}
