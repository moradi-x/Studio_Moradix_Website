import Topbar from "../Sections/Topbar";
import Sidebar from "../Sections/Sidebar";
import Footer from "../Sections/Footer";
import ScrollTop from "../Sections/ScrollTop";


export default function Layout({ children }) {

    return (

        <div className="min-h-screen flex bg-gray-50">


            <Sidebar />


            <div className="flex-1 flex flex-col">


                <Topbar />


                <main className="flex-1 p-6">

                    {children}

                </main>


                <Footer />


            </div>


            <ScrollTop />


        </div>

    );

}