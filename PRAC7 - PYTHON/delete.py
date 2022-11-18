from pymongo import MongoClient
client = MongoClient('localhost',27017)
db = client.mydb

def delete():
    try:
        name = input("Enter your name : ")        
        db.pythoncollection.delete_one(
            {"name":name})

        print("Record Deleted Successfully")

    except Exception:
        print(str(e))

delete()