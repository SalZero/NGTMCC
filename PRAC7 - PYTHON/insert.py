from pymongo import MongoClient
client = MongoClient('localhost',27017)
db = client.mydb

def insert():
    try:
        name = input("Enter your name : ")
        age = int(input("Enter your age : "))
        dept = input("Enter your department : ")
        sal = int(input("Enter your salary : "))

        db.pythoncollection.insert_one(
            {
                "name":name,
                "age":age,
                "department":dept,
                "salary":sal
        })
        print("Insert Successfully")

    except Exception:
        print(str(e))

insert()