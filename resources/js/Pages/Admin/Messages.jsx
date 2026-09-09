import MainLayout from "../../Layouts/MainLayout";
import { router } from "@inertiajs/react";


export default function Messages({messages}) {


    function remove(id){

        if(confirm("Delete this message?")){

            router.delete(`/admin/messages/${id}`);

        }

    }


    return (

        <MainLayout>


            <section className="px-8 py-24">

                <div className="max-w-5xl mx-auto">


                    <h1 className="text-5xl font-bold mb-12">
                        Contact Messages
                    </h1>



                    <div className="space-y-6">


                        {messages.map((message)=>(


                            <div
                                key={message.id}
                                className="border rounded-2xl p-6"
                            >

                                <h2 className="text-2xl font-bold">
                                    {message.name}
                                </h2>


                                <p className="mt-2">
                                    {message.email}
                                </p>


                                <p className="mt-4">
                                    {message.message}
                                </p>



                                <button

                                    onClick={()=>remove(message.id)}

                                    className="mt-5 px-5 py-2 bg-black text-white rounded-full"

                                >

                                    Delete

                                </button>


                            </div>


                        ))}


                    </div>


                </div>


            </section>


        </MainLayout>

    );

}