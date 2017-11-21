package isen.java.tp_xml;

import org.xml.sax.SAXException;
import org.xml.sax.XMLReader;
import org.xml.sax.ContentHandler;
import org.xml.sax.helpers.XMLReaderFactory;

import java.io.IOException;

public class SeeBook {

    public static void main(String[] args){
        try{
            XMLReader xr = XMLReaderFactory.createXMLReader();
            xr.setContentHandler(new BookSaxReader());
            xr.parse( "./src/data.xml");
        } catch (SAXException e){
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }

    }
}
