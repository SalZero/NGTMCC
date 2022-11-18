from pymongo import MongoClient
client = MongoClient('localhost',27017)
db = client.mydb

def read():
    try:
        res = db.pythoncollection.find()
        print("Data Fetched Successfully")
        for one in res:
            print(one)          

    except Exception:
        print(str(e))

read()