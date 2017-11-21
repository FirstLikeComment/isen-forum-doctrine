package isen.java.tp_xml;

import org.xml.sax.Attributes;
import org.xml.sax.ContentHandler;
import org.xml.sax.Locator;
import org.xml.sax.SAXException;

public class BookSaxReader implements ContentHandler{

    private int section;
    private int chapter;

    @Override
    public void setDocumentLocator(Locator locator) {

    }

    @Override
    public void startDocument() throws SAXException {
        //System.out.println("Début");
        section = 0;
        chapter = 0;
    }

    @Override
    public void endDocument() throws SAXException {
        //System.out.println("Fin");
    }

    @Override
    public void startPrefixMapping(String prefix, String uri) throws SAXException {
        System.out.println(prefix);
    }

    @Override
    public void endPrefixMapping(String prefix) throws SAXException {

    }

    @Override
    public void startElement(String uri, String localName, String qName, Attributes atts) throws SAXException {

        for (int index = 0; index < atts.getLength(); index++) { // on parcourt la liste des attributs
            //System.out.println("for");
            if (localName.equals("livre")){
                System.out.println("Livre: " + atts.getValue(index));
            }
            if (qName.equals("auteur")){
                if (atts.getQName(index).equals("nom")) {
                    System.out.println("Auteur: " + atts.getValue(index) + " " + atts.getValue(index + 1));
                }
            }
            if (qName.equals("section")){
                section+=1;
                System.out.println(section + ". " + atts.getValue(index));
                chapter = 0;
            }
            if (qName.equals("chapitre")){
                chapter+=1;
                System.out.println(section + "." + chapter  + ". "+ atts.getValue(index));
            }
        }
    }

    @Override
    public void endElement(String uri, String localName, String qName) throws SAXException {

    }

    @Override
    public void characters(char[] ch, int start, int length) throws SAXException {

    }

    @Override
    public void ignorableWhitespace(char[] ch, int start, int length) throws SAXException {

    }

    @Override
    public void processingInstruction(String target, String data) throws SAXException {

    }

    @Override
    public void skippedEntity(String name) throws SAXException {

    }
}
