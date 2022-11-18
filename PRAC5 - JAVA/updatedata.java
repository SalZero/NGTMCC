import com.mongodb.client.MongoCollection;
import com.mongodb.client.MongoDatabase;
import com.mongodb.BasicDBObject;
import com.mongodb.DB;
import com.mongodb.DBCollection;
import com.mongodb.MongoClient;
import com.mongodb.DBObject;
import com.mongodb.WriteResult;
import java.net.UnknownHostException;

public class updatedata
{
	public static void main(String args[])
	{
		MongoClient mongo =new MongoClient("localhost",27017);
		System.out.println("Connected to the database successfully");
		DB db= mongo.getDB("mydb");
		DBCollection col=db.getCollection("javacollection");
		DBObject query= new BasicDBObject("roll_number",229747);
		DBObject update=new BasicDBObject();
		update.put("$set",new BasicDBObject("likes",150));
		WriteResult result= col.update(query,update);
		mongo.close();
	}
}