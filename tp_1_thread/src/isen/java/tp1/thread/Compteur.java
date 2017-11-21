package isen.java.tp1.thread;

public class Compteur implements Runnable {
    /**
     * @see java.lang.Thread#run()
     */
    @Override
    public void run() {

    }
    /**
     * @param args
     */
    public static void main(String[] args) {
        Compteur c = new Compteur ();
        new Thread(c).start();
    }
}
