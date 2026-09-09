export default function ValidationErrors({ errors }) {

    if (!Object.keys(errors).length) {
        return null;
    }

    return (
        <div className="mb-6 rounded-lg bg-red-100 p-4">

            <ul className="text-red-600 list-disc list-inside">

                {Object.values(errors).map((error, index) => (
                    <li key={index}>
                        {error}
                    </li>
                ))}

            </ul>

        </div>
    );
}