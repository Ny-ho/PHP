from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware
from pydantic import BaseModel, EmailStr

app = FastAPI()

# This tells the backend to allow requests from your frontend (port 5500)
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # Allows any site (including port 5500) to talk to your API
    allow_credentials=True,
    allow_methods=["*"],  # Allows POST, GET, etc.
    allow_headers=["*"],  # Allows all headers
)

class student(BaseModel):
    name:str
    email:EmailStr
    phone:str

database_simulator =[]

@app.post("/submit")
async def regular_std(data:student):
    database_simulator.append(data.dict())
    return {"message":f"successfully stored{data.name} in the database"}
