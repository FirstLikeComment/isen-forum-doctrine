package isen.java.tp1.thread;

public class ExempleThread1 implements Runnable {

    private String toSay;
    public ExempleThread1(String toSay) {
        this.toSay=toSay;
    }
    public void run() {
        for (int i =1; i< 1000; i++)
            System.out.print(i + " " + toSay );
    }
    public static void main(String args[]){

        ExempleThread1 thread1, thread2, thread3;
        thread1 = new ExempleThread1("Hello ");
        thread2 = new ExempleThread1("World ");
        thread3 = new ExempleThread1("Everybody ");

        System.out.println("Je suis le main :)");
        new Thread(thread1).start();
        new Thread(thread2).start();
        new Thread(thread3).start();
    }
}
