from pymongo import MongoClient
client = MongoClient('localhost',27017)
db = client.mydb

def update():
    try:
        name = input("Enter your name : ")
        sal = int(input("Enter your salary : "))

        db.pythoncollection.update_one(
            {"name":name},
            {"$set":{"salary":sal}
            })
        print("Updated Successfully")

    except Exception:
        print(str(e))

update()