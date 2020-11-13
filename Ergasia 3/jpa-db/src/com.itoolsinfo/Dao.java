package com.itoolsinfo;
 
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;
 
public class Dao 
{
  public boolean saveDetails(int employeeId, String employeeName, int salary)
{
    boolean flag=true;
    SessionFactory factory=new Configuration().configure("hibernate.cfg.xml").buildSessionFactory();
      Session session=factory.openSession();
       
      Artist artist=new Artist();
      artist.setBarcode(barcode);
      artist.setName(name);
      artist.setGenre(genre);
	  artist.setDescription(description);

      Transaction transaction=session.beginTransaction();
      try
      {
          session.save(artist);
          transaction.commit();
      }catch(Exception e)
      {
          transaction.rollback();
          flag=false;
           
      }
      session.close();
      return flag;
      }
}
