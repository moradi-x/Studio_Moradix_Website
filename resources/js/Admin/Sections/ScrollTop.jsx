import { useEffect, useState } from "react";


export default function ScrollTop() {

    const [show, setShow] = useState(false);


    useEffect(() => {

        const handleScroll = () => {

            setShow(window.scrollY > 300);

        };


        window.addEventListener("scroll", handleScroll);


        return () => {

            window.removeEventListener("scroll", handleScroll);

        };

    }, []);



    const scrollToTop = () => {

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    };


    if (!show) return null;


    return (

        <button
            onClick={scrollToTop}
            className="fixed bottom-5 right-5 bg-black text-white w-10 h-10 rounded-full"
        >
            ↑
        </button>

    );

}