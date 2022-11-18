import com.mongodb.client.MongoCollection;
import com.mongodb.client.MongoDatabase;
import com.mongodb.MongoClient;
import com.mongodb.MongoCredential;
import org.bson.Document;
public class insert
{
	public static void main(String args[])
   	{
		MongoClient mongo =new MongoClient("localhost",27017);
       		System.out.println("Connected to the database successfully");
        	MongoDatabase database= mongo.getDatabase("mydb");
      		MongoCollection<Document> collection=database.getCollection("javacollection");
       		System.out.println("Collection javacollection selected successfully");
     		Document document=new Document();
		document.append("name","Apoorva Tupe");
        	document.append("roll_number",229747);
        	document.append("description","database");
        	document.append("likes",200);
        	document.append("url","http://www.oracle.com");
        	document.append("by","OracleSQL");
        	collection.insertOne(document);
        	System.out.println("Document inserted successfully");
	}
}