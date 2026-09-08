import MainLayout from "../../Layouts/MainLayout";


export default function Messages({ messages }) {

    return (

        <MainLayout>

            <section className="px-8 py-24">

                <div className="max-w-5xl mx-auto">


                    <p className="uppercase tracking-widest text-sm mb-6">
                        Admin
                    </p>


                    <h1 className="text-5xl font-bold mb-12">
                        Contact Messages
                    </h1>



                    <div className="space-y-6">


                        {messages.length === 0 ? (

                            <p className="text-gray-500">
                                No messages yet.
                            </p>

                        ) : (


                            messages.map((message)=>(

                                <div
                                    key={message.id}
                                    className="border rounded-2xl p-6"
                                >

                                    <h2 className="text-xl font-bold">
                                        {message.name}
                                    </h2>


                                    <p className="text-gray-500 mt-1">
                                        {message.email}
                                    </p>


                                    <p className="mt-4">
                                        {message.message}
                                    </p>


                                    <p className="text-sm text-gray-400 mt-4">
                                        {message.created_at}
                                    </p>


                                </div>

                            ))

                        )}


                    </div>


                </div>

            </section>

        </MainLayout>

    );
}