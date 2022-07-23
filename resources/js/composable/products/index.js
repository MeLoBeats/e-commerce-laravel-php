export default function useProduct() {
    const add = async (productId) => {
        let response = await axios.post("/api/products", {
            productId,
        });
        console.log(response);
    };
    return {
        add,
    };
}
